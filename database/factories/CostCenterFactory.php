<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CostCenter>
 */
class CostCenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = [
            'Financeiro',
            'Recursos Humanos',
            'Tecnologia da Informação',
            'Comercial',
            'Marketing',
            'Operações',
            'Logística',
            'Compras',
            'Produção',
            'Jurídico',
            'Atendimento ao Cliente',
            'Contabilidade',
            'Engenharia',
        ];

        $subAreas = [
            'Administrativo',
            'Planejamento',
            'Controle',
            'Projetos',
            'Operacional',
            'Infraestrutura',
            'Suporte',
            'Desenvolvimento',
            'Expansão',
            'Treinamento',
            'Qualidade',
            'Auditoria',
            'Manutenção',
        ];

        $department  = $this->faker->randomElement($departments);
        $subArea     = $this->faker->randomElement($subAreas);

        return [
            'name'       => "{$department} – {$subArea}",
            'department' => $department,
        ];
    }

}
