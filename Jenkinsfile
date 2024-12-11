pipeline {
    agent any

    environment {
        FTP_SERVER = 'ftp.staging-kulmapeck.online'
        FTP_USER = 'admin_staging-kulmapeck.online'
        FTP_PASSWORD = credentials('FTP_STAGING_PASSWORD')
        REMOTE_DIRECTORY = ''
    }

    stages {
        stage('Clone Kulmapeck Project') {
            steps {
                git branch: 'develop', url: 'https://github.com/Sensei237/kulmapeck.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'composer install --no-interaction --prefer-dist'
            } 
        }

        stage('Setup Development Environment') {
            steps {
                bat 'if not exist .env copy .env.example .env'
                bat 'php bin/console doctrine:database:create --if-not-exists --env=dev'
                bat 'php bin/console doctrine:migrations:migrate --no-interaction --env=dev'
            }
        }

        stage('Clear Symfony Cache') {
            steps {
                bat 'php bin/console cache:clear --env=dev'
            }
        }

        stage('Run Tests') {
            steps {
                bat 'php bin/phpunit --coverage-html coverage'
            }
        }

        stage('Static Analysis') {
            steps {
                bat 'vendor/bin/phpstan analyse src --level=5'
                bat 'vendor/bin/php-cs-fixer fix src --dry-run'
            }
        }

        stage('Build Assets') {
            steps {
                bat 'npm install'
                bat 'npm run dev'
            }
        }

        stage('Zip Project') {
            steps {
                bat 'if exist depl.zip del depl.zip'
                powershell '''
                    Compress-Archive -Path .\\* -DestinationPath depl.zip -Force -Exclude @(
                        "node_modules\\*",
                        ".git\\*",
                        "tests\\*",
                        "coverage\\*",
                        "*.log"
                    )
                '''
            }
        }

        stage('Deploy to Staging') {
            steps {
                bat "curl --ftp-create-dirs -T depl.zip -u %FTP_USER%:%FTP_PASSWORD% ftp://%FTP_SERVER%%REMOTE_DIRECTORY%/"
            }
        }

        stage('Post-Deploy Actions') {
            steps {
                bat "ssh -p 5804 %FTP_USER%@%FTP_SERVER% 'unzip -o %REMOTE_DIRECTORY%/depl.zip -d %REMOTE_DIRECTORY%'"
                bat "ssh -p 5804 %FTP_USER%@%FTP_USER% 'rm %REMOTE_DIRECTORY%/depl.zip'"
                bat "ssh -p 5804 %FTP_USER%@%FTP_SERVER% 'php %REMOTE_DIRECTORY%/bin/console cache:clear --env=dev'"
            }
        }
    }

    post {
        always {
            cleanWs()
        }
        success {
            echo 'Deployment to staging successful!'
        }
        failure {
            echo 'Deployment failed!'
        }
    }
}
