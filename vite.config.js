import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
import path from 'path';

const cssDir = path.resolve(__dirname, 'public/css');
const jsDir = path.resolve(__dirname, 'public/js');

const createDirIfNotExists = (dir) => {
    if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
    }
};

createDirIfNotExists(cssDir);
createDirIfNotExists(jsDir);

export default defineConfig({


    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/adminlte-custom.scss',
                'resources/js/app.js',


                'app/Modules/**/*/Resources/js/*.js',
                'app/Modules/**/*/Resources/css/*.css',

            ],
               refresh: [
                'resources/views/**/*.blade.php',
                'app/Modules/**/*.blade.php',
                'app/Modules/**/*.php'
            ],
        }),
    ],
    build: {
        outDir: 'public',
        emptyOutDir: true,
        rollupOptions: {
            output: {
                entryFileNames: 'js/[name].js',
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name && assetInfo.name.endsWith('.css')) {
                        return 'css/[name][extname]';
                    }
                    return 'assets/[name][extname]';
                },
            },
        },
    },





});
