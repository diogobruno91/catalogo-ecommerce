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
            ['name' => 'Camiseta Nike', 'price' => 149.90, 'category_id' => 1, 'detail_id' => 2, 'description' => 'Camiseta de alta qualidade, confortável e perfeita para o verão. Feita de algodão, oferece ótimo caimento e durabilidade.', 'image_url' => 'https://static.allianzparqueshop.com.br/produtos/camisa-nike-academy-top-ss-masculina/88/HZM-0816-088/HZM-0816-088_zoom1.jpg?ts=1565102166&ims=544x', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Smartphone Samsung', 'price' => 2599.99, 'category_id' => 2, 'detail_id' => 6, 'description' => 'Smartphone de última geração com tela infinita, câmera de alta resolução e desempenho superior. Ideal para quem busca tecnologia e praticidade.', 'image_url' => 'https://tse1.mm.bing.net/th?id=OIP.paMyWVRFmjyZXNxpBOwnMwHaHa&w=200&h=200&c=7', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Calça Jeans Levi\'s', 'price' => 249.90, 'category_id' => 3, 'detail_id' => 3, 'description' => 'Calça jeans resistente e confortável, com corte moderno e ajuste perfeito. Ideal para o uso diário.', 'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.EProE1wCqxzKwt7XFKRMOQHaHa&w=200&h=200&c=7', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tênis Esportivo Nike', 'price' => 299.90, 'category_id' => 1, 'detail_id' => 4, 'description' => 'Tênis de corrida com tecnologia de amortecimento, proporcionando conforto e suporte durante os treinos e atividades físicas.', 'image_url' => 'https://tse1.mm.bing.net/th?id=OIP.MO-nm1KC1L-7CIjD9tCI8gHaHa&w=200&h=200&c=7', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jaqueta de Couro', 'price' => 599.90, 'category_id' => 3, 'detail_id' => 5, 'description' => 'Jaqueta de couro com design moderno e resistência para o clima frio. Perfeita para quem busca estilo e proteção.', 'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.0RJTEGgpPlKaWA_qWbmpzQHaKX&w=200&h=280&c=7', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Relógio Casio', 'price' => 199.90, 'category_id' => 2, 'detail_id' => 7, 'description' => 'Relógio Casio com design clássico, resistente e funcional. Ideal para o uso diário e para quem aprecia qualidade.', 'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.2aLoZ_uTLQOxwoFM9liRngHaJI&w=200&h=246&c=7', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofá Recliner', 'price' => 2999.90, 'category_id' => 4, 'detail_id' => 8, 'description' => 'Sofá reclinável confortável e elegante, com estrutura robusta e acabamento de alta qualidade. Perfeito para relaxar e decorar sua sala de estar.', 'image_url' => 'https://sofainbox.vtexassets.com/arquivos/ids/160652-1000-1000?v=638261435112070000&width=1000&height=1000&aspect=true', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cadeira de Escritório', 'price' => 499.90, 'category_id' => 4, 'detail_id' => 9, 'description' => 'Cadeira ergonômica para escritório com ajuste de altura e apoio lombar. Proporciona conforto durante longas horas de trabalho.', 'image_url' => 'https://abracasa.vteximg.com.br/arquivos/ids/181718/cadeira-de-escritorio-franca-preto-diagonal.jpg?v=637967860223230000', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bolsa Louis Vuitton', 'price' => 3999.90, 'category_id' => 3, 'detail_id' => 11, 'description' => 'Bolsa Louis Vuitton de couro premium, com design sofisticado e espaçosa. Perfeita para ocasiões especiais e para quem busca elegância.', 'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEZNiq37hgrWi6lh5TYvI5p5L3h2LhpKssuA&s', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Óculos Ray-Ban', 'price' => 199.90, 'category_id' => 3, 'detail_id' => 12, 'description' => 'Óculos de sol Ray-Ban com estilo clássico e proteção UV. Ideal para quem busca um visual moderno e proteção para os olhos.', 'image_url' => 'https://cdn.dooca.store/101255/products/oculos-de-sol-rayban-rb4373l-azul-com-cinza_640x640+fill_ffffff.jpg?v=1693247452&webp=0', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mochila North Face', 'price' => 349.90, 'category_id' => 2, 'detail_id' => 13, 'description' => 'Mochila da North Face com vários compartimentos, ideal para viagens e aventuras ao ar livre. Confortável e resistente.', 'image_url' => 'https://thenorthface.vtexassets.com/arquivos/ids/219676/NF0A52SE_KX7_hero.png?v=638429952216400000', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Capa de Chuva Columbia', 'price' => 129.90, 'category_id' => 1, 'detail_id' => 14, 'description' => 'Capa de chuva da Columbia, resistente à água e compacta, ideal para se proteger da chuva durante os dias úmidos.', 'image_url' => 'http://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRR-7vuZOVhm2pHS3mew9hUu-gYzLlLIFU9w&s', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tênis Adidas', 'price' => 399.90, 'category_id' => 1, 'detail_id' => 10, 'description' => 'Tênis Adidas com tecnologia de conforto para corridas e atividades físicas. Leve, durável e com excelente suporte.', 'image_url' => 'https://anjuss.fbitsstatic.net/img/p/tenis-adidas-grand-court-2-0-branco-86396/319069-1.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tênis Puma', 'price' => 299.90, 'category_id' => 1, 'detail_id' => 15, 'description' => 'Tênis Puma com design arrojado e amortecimento eficiente. Perfeito para o uso diário ou para atividades esportivas.', 'image_url' => 'https://static.netshoes.com.br/produtos/tenis-puma-smash-v2-masculino/26/D14-4129-026/D14-4129-026_zoom1.jpg?ts=1705507349', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
