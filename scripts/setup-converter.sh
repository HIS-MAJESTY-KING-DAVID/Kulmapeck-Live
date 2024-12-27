#!/bin/bash

# Update package list
sudo apt-get update

# Install ImageMagick for image conversion
sudo apt-get install -y imagemagick

# Install unoconv for document conversion
sudo apt-get install -y unoconv

# Create temp directory with proper permissions
sudo mkdir -p /var/www/kulmapeck/var/temp
sudo chown -R www-data:www-data /var/www/kulmapeck/var/temp
sudo chmod 755 /var/www/kulmapeck/var/temp

# Configure ImageMagick policy to allow PDF conversion
# This is necessary because some ImageMagick installations restrict PDF operations by default
sudo sed -i 's/rights="none" pattern="PDF"/rights="read|write" pattern="PDF"/' /etc/ImageMagick-6/policy.xml

# Start unoconv listener as a service
cat << EOF | sudo tee /etc/systemd/system/unoconv-listener.service
[Unit]
Description=unoconv listener for document conversion
After=network.target

[Service]
ExecStart=/usr/bin/unoconv --listener
User=www-data
Group=www-data
Restart=always

[Install]
WantedBy=multi-user.target
EOF

# Enable and start the unoconv listener service
sudo systemctl enable unoconv-listener
sudo systemctl start unoconv-listener

echo "Setup completed successfully!"
echo "Please check that the following commands work:"
echo "convert -version"
echo "unoconv --version"
