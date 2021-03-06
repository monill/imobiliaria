<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_title' => 'Imobiliária',
            //SEO
            'meta_keywords' => 'venda, loca&ccedil;&atilde;o, aluguel garantido, apartamento, casa, terreno, imovel comercial, imoveis rurais, areas, apto, lancamento de imoveis, imobiliaria online, imoveis online, sobrado, administracao de bens, adm de imoveis, compra de imovel, financiamento de imovel',
            'meta_description' => null,
            //Analytics
            'analytics' => null,
            //Empresa
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus est sit amet orci suscipit, at sagittis lorem condimentum. Aliquam ut ornare purus, quis molestie neque. Cras tincidunt nibh nunc, sed lobortis lorem egestas ut. Aliquam mollis vestibulum lacus sed viverra. Praesent et ipsum sit amet nunc cursus bibendum. Quisque at risus quam. Cras laoreet faucibus dui, in tristique ligula rutrum vel. Nam id iaculis dui. Quisque velit eros, iaculis eget volutpat hendrerit, porta in risus. Donec vitae blandit purus. Vivamus imperdiet tincidunt nibh sit amet laoreet.',
            'address' => 'Rua Armando Steck, 000, Centro',
            'email' => 'imobiliaria@imob.com.br',
            'phone1' => '1234-5678',
            'phone2' => '9513-7862',
            //Social
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'googleplus' => 'plus.google.com',
            'linkedin' => 'www.linkedin.com',
            'link' => null,
            //Google Maps
            'latitude' => -23.08396277,
            'longitude' => -46.94924361,
            //Termos e Privacidade
            'terms' => null,
            'privacy' => null,
        ]);
    }
}
