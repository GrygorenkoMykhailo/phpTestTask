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

    // #[Test]
    // public function get_products_index(): void
    // {
    //     $product = Product::factory(3)
    //                 ->has(Image::factory()) 
    //                 ->create();
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    //     $response->assertViewHas('products');
    // }

    //returns 403 Unauthorized

    // #[Test]
    // public function create_new_product(): void
    // {
    //     Storage::fake('public');
    //     $file = UploadedFile::fake()->image('test.jpg');
    //     $response = $this->post('/store', [
    //         'title' => 'Test Product',
    //         'description' => 'Test Description',
    //         'price' => 99.99,
    //         'image' => $file,
    //     ]);
    //     $response->assertStatus(200);
    //     $response->assertViewIs('dashboard.create');
        

    //     $this->assertDatabaseHas('products', [
    //         'title' => 'Test Product',
    //         'description' => 'Test Description',
    //     ]);

    //     $this->assertDatabaseHas('images', [
    //         'path' => 'uploads/test.jpg',
    //     ]);
    //     Storage::disk('public')->assertExists('uploads/test.jpg');
    // }

    // #[Test]
    // public function it_deletes_a_product()
    // {
    //     $product = Product::factory()->create();

    //     $response = $this->delete("/destroy/{$product->id}");

    //     $response->assertStatus(200);
    //     $this->assertDatabaseMissing('products', [
    //         'id' => $product->id,
    //     ]);
    // }
}
