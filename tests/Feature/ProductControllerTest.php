<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Image;

class ProductControllerTest extends TestCase
{
    #[Test]
    public function create_new_product(): void
    {
        Storage::fake('public');
        $file = UploadedFile::fake()->image('test.jpg');
        $response = $this->post('/store', [
            'title' => 'Test Product',
            'description' => 'Test Description',
            'price' => 99.99,
            'image' => $file,
        ]);
        $response->assertStatus(200);
        $response->assertViewIs('dashboard.create');

        $product = Product::latest()->first();
        $image = $product->images()->latest()->first();

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'title' => 'Test Product',
            'description' => 'Test Description',
        ]);

        Storage::disk('public')->assertExists($image->path);
        Product::destroy($product->id);
    }
    #[Test]
    public function get_products_index(): void
    {
        $product = Product::factory(3)
                    ->has(Image::factory()) 
                    ->create();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewHas('products');
    }

    #[Test]
    public function it_deletes_a_product()
    {
        $product = Product::factory()->create();

        $response = $this->delete("/destroy/{$product->id}");

        $response->assertStatus(200);
        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }
}
