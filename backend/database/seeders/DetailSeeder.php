<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('details')->insert([
            ['color' => null, 'size' => null, 'details' => 'Descrição detalhada sobre o produto. Produto muito bom!', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Azul', 'size' => 'M', 'details' => 'Camiseta de alta qualidade, confortável e perfeita para o verão.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Preto', 'size' => 'G', 'details' => 'Calça jeans resistente e muito confortável.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Vermelho', 'size' => 'P', 'details' => 'Tênis esportivo de corrida com ótima performance.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Branco', 'size' => 'M', 'details' => 'Jaqueta de couro com design moderno e resistência para o clima frio. Perfeita para quem busca estilo e proteção.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Cinza', 'size' => 'G', 'details' => 'Celular com tela de alta qualidade e design moderno.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Azul', 'size' => 'M', 'details' => 'Relógio com design moderno, perfeito para qualquer ocasião.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Preto', 'size' => 'GG', 'details' => 'Sofá confortável e elegante para a sala de estar.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Bege', 'size' => null, 'details' => 'Cadeira ergonômica com apoio para os braços e ajustável.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Branco', 'size' => 'G', 'details' => 'Tenis de corrida com design moderno e confortável.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Rosa', 'size' => 'S', 'details' => 'Bolsas de mão sofisticadas, perfeitas para um evento social.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Preto', 'size' => null, 'details' => 'Óculos de sol, estilo clássico e atemporal.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Verde', 'size' => 'P', 'details' => 'Mochila de viagem, ideal para aventuras ao ar livre.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => null, 'size' => null, 'details' => 'Capa de chuva, prática e resistente para dias de chuva.', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Azul', 'size' => 'M', 'details' => 'Tênis de caminhada com ótimo suporte e conforto.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
