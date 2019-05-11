<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GuestShopTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testGuestAddToCart()
    {
        $categories = app('Webkul\Category\Repositories\CategoryRepository')->all();
        $products = app('Webkul\Product\Repositories\ProductRepository')->all();

        $slugs = array();

        foreach ($categories as $category) {
            if ($category->slug != 'root') {
                array_push($slugs, $category->slug);
            }
        }

        $slugIndex = array_rand($slugs);
        $testSlug = $slugs[$slugIndex];

        dd($products);

        $this->browse(function (Browser $browser) use($testSlug){
            $browser->visit(route('shop.categories.index', $testSlug));
            $browser->pause(4000);
        });
    }
}
