<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Camiseta Nike', 'price' => 149.90, 'category_id' => 1, 'detail_id' => 2, 'description' => 'Camiseta de alta qualidade, confortável e perfeita para o verão. Feita de algodão, oferece ótimo caimento e durabilidade.', 'image_url' => 'https://example.com/images/camiseta-nike.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Smartphone Samsung', 'price' => 2599.99, 'category_id' => 2, 'detail_id' => 6, 'description' => 'Smartphone de última geração com tela infinita, câmera de alta resolução e desempenho superior. Ideal para quem busca tecnologia e praticidade.', 'image_url' => 'https://example.com/images/smartphone-samsung.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Calça Jeans Levi\'s', 'price' => 249.90, 'category_id' => 3, 'detail_id' => 3, 'description' => 'Calça jeans resistente e confortável, com corte moderno e ajuste perfeito. Ideal para o uso diário.', 'image_url' => 'https://example.com/images/calca-jeans-levi.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tênis Esportivo Nike', 'price' => 299.90, 'category_id' => 1, 'detail_id' => 4, 'description' => 'Tênis de corrida com tecnologia de amortecimento, proporcionando conforto e suporte durante os treinos e atividades físicas.', 'image_url' => 'https://example.com/images/tenis-nike.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jaqueta de Couro', 'price' => 599.90, 'category_id' => 3, 'detail_id' => 5, 'description' => 'Jaqueta de couro com design moderno e resistência para o clima frio. Perfeita para quem busca estilo e proteção.', 'image_url' => 'https://example.com/images/jaqueta-couro.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Relógio Casio', 'price' => 199.90, 'category_id' => 2, 'detail_id' => 7, 'description' => 'Relógio Casio com design clássico, resistente e funcional. Ideal para o uso diário e para quem aprecia qualidade.', 'image_url' => 'https://example.com/images/relogio-casio.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofá Recliner', 'price' => 2999.90, 'category_id' => 4, 'detail_id' => 8, 'description' => 'Sofá reclinável confortável e elegante, com estrutura robusta e acabamento de alta qualidade. Perfeito para relaxar e decorar sua sala de estar.', 'image_url' => 'https://example.com/images/sofa-recliner.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cadeira de Escritório', 'price' => 499.90, 'category_id' => 4, 'detail_id' => 9, 'description' => 'Cadeira ergonômica para escritório com ajuste de altura e apoio lombar. Proporciona conforto durante longas horas de trabalho.', 'image_url' => 'https://example.com/images/cadeira-escritorio.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bolsa Louis Vuitton', 'price' => 3999.90, 'category_id' => 3, 'detail_id' => 11, 'description' => 'Bolsa Louis Vuitton de couro premium, com design sofisticado e espaçosa. Perfeita para ocasiões especiais e para quem busca elegância.', 'image_url' => 'https://example.com/images/bolsa-louis-vuitton.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Óculos Ray-Ban', 'price' => 199.90, 'category_id' => 3, 'detail_id' => 12, 'description' => 'Óculos de sol Ray-Ban com estilo clássico e proteção UV. Ideal para quem busca um visual moderno e proteção para os olhos.', 'image_url' => 'https://example.com/images/oculos-rayban.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mochila North Face', 'price' => 349.90, 'category_id' => 2, 'detail_id' => 13, 'description' => 'Mochila da North Face com vários compartimentos, ideal para viagens e aventuras ao ar livre. Confortável e resistente.', 'image_url' => 'https://example.com/images/mochila-northface.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Capa de Chuva Columbia', 'price' => 129.90, 'category_id' => 1, 'detail_id' => 14, 'description' => 'Capa de chuva da Columbia, resistente à água e compacta, ideal para se proteger da chuva durante os dias úmidos.', 'image_url' => 'https://example.com/images/capa-chuva-columbia.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tênis Adidas', 'price' => 399.90, 'category_id' => 1, 'detail_id' => 10, 'description' => 'Tênis Adidas com tecnologia de conforto para corridas e atividades físicas. Leve, durável e com excelente suporte.', 'image_url' => 'https://example.com/images/tenis-adidas.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tênis Puma', 'price' => 299.90, 'category_id' => 1, 'detail_id' => 15, 'description' => 'Tênis Puma com design arrojado e amortecimento eficiente. Perfeito para o uso diário ou para atividades esportivas.', 'image_url' => 'https://example.com/images/tenis-puma.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
