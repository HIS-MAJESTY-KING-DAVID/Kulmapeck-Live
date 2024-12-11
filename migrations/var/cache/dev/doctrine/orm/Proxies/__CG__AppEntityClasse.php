<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Classe extends \App\Entity\Classe implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cours' => [parent::class, 'cours', null],
        "\0".parent::class."\0".'eleves' => [parent::class, 'eleves', null],
        "\0".parent::class."\0".'evaluations' => [parent::class, 'evaluations', null],
        "\0".parent::class."\0".'exams' => [parent::class, 'exams', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'skillLevel' => [parent::class, 'skillLevel', null],
        "\0".parent::class."\0".'slug' => [parent::class, 'slug', null],
        "\0".parent::class."\0".'sousSysteme' => [parent::class, 'sousSysteme', null],
        "\0".parent::class."\0".'specialite' => [parent::class, 'specialite', null],
        'cours' => [parent::class, 'cours', null],
        'eleves' => [parent::class, 'eleves', null],
        'evaluations' => [parent::class, 'evaluations', null],
        'exams' => [parent::class, 'exams', null],
        'id' => [parent::class, 'id', null],
        'name' => [parent::class, 'name', null],
        'skillLevel' => [parent::class, 'skillLevel', null],
        'slug' => [parent::class, 'slug', null],
        'sousSysteme' => [parent::class, 'sousSysteme', null],
        'specialite' => [parent::class, 'specialite', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}