<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for SEO';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/about'))
            ->add(Url::create('/contact'));

        // Add dynamic product pages
        Product::all()->each(function ($product) use ($sitemap) {
            $sitemap->add(Url::create("/products/{$product->slug}"));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully.');
    }
}
