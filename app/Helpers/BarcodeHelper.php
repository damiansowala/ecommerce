<?php

namespace App\Helpers;

use Picqer\Barcode\Types\TypeEAN13;
use Picqer\Barcode\Types\TypeEAN8;
use Picqer\Barcode\Types\TypeEAN14;
use Picqer\Barcode\Types\TypeCode128;
use Picqer\Barcode\Renderers\PngRenderer;

use Illuminate\Support\Facades\Log;

class BarcodeHelper
{

    public static function generateEanImages(array $eanData, int $productId)
    {

        Log::debug('EAN generating barcode...');

        $renderer = new PngRenderer();

        $productFolder = "product-{$productId}";
        $path = public_path("images/products/eans/{$productFolder}/");

        // Tworzenie folderu, jeśli nie istnieje
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        foreach ($eanData as $eanType => $eanValue) {
            // Sprawdzenie, czy istnieje odpowiedni EAN w danych
            if (!empty($eanValue)) {
                $fileName = "{$eanType}-{$productId}.jpg";
                $imagePath = "{$path}{$fileName}";

                // Generowanie odpowiedniego kodu kreskowego w zależności od typu
                switch ($eanType) {
                    case 'ean13':
                        $barcode = (new TypeEAN13())->getBarcode($eanValue);
                        break;
                    case 'ean8':
                        $barcode = (new TypeEAN8())->getBarcode($eanValue);
                        break;
                    case 'ean14':
                        $barcode = (new TypeEAN14())->getBarcode($eanValue);
                        break;
                    case 'ean128':
                        $barcode = (new TypeCode128())->getBarcode($eanValue);
                        break;
                    default:
                        continue 2; // Jeśli nie obsługujemy danego typu EAN, przejdź do następnego
                }
                Log::debug('EAN generating barcode...');
                // Zapisanie obrazu
                file_put_contents($imagePath, $renderer->render($barcode, $barcode->getWidth() * 2));
            }
        }

        Log::debug('EAN generating barcode...');
    }


    public function getEanImagePath(string $eanType, int $productId)
    {
        return asset("images/products/eans/product-{$productId}/{$eanType}-{$productId}.png");
    }
}
