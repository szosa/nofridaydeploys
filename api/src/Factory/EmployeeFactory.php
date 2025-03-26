<?php

namespace App\Factory;

use App\Entity\Employee;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use function Zenstruck\Foundry\lazy;

/**
 * @extends PersistentProxyObjectFactory<Employee>
 */
final class EmployeeFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Employee::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'email' => self::faker()->email(),
            'name' => self::faker()->firstName(),
            'surname' => self::faker()->lastName(),
            'phoneNumber' => self::faker()->phoneNumber(),
            'company' => lazy(fn() => CompanyFactory::random())
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Employee $employee): void {})
        ;
    }
}
