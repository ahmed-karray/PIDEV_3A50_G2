<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \App\Entity\Event implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'budget' => [parent::class, 'budget', null],
        "\0".parent::class."\0".'cours' => [parent::class, 'cours', null],
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'heure' => [parent::class, 'heure', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'img' => [parent::class, 'img', null],
        "\0".parent::class."\0".'lieu' => [parent::class, 'lieu', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        "\0".parent::class."\0".'type' => [parent::class, 'type', null],
        'budget' => [parent::class, 'budget', null],
        'cours' => [parent::class, 'cours', null],
        'date' => [parent::class, 'date', null],
        'description' => [parent::class, 'description', null],
        'heure' => [parent::class, 'heure', null],
        'id' => [parent::class, 'id', null],
        'img' => [parent::class, 'img', null],
        'lieu' => [parent::class, 'lieu', null],
        'titre' => [parent::class, 'titre', null],
        'type' => [parent::class, 'type', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
