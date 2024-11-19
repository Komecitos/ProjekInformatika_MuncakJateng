import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';


// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/sass/app.scss',
//                 'resources/js/app.js',
//             ],
//             refresh: true,
//         }),
//     ],
// });

// original code
// import { defineConfig } from 'vite';
// import vue from '@vitejs/plugin-vue';
// import path from 'path';

// export default defineConfig({
//     plugins: [vue()],
//     build: {
//         outDir: path.resolve(__dirname, 'public/build'),  // Output build ke public/build
//         manifest: true,  // Menghasilkan file manifest.json
//         rollupOptions: {
//             input: path.resolve(__dirname, 'resources/js/app.js'),  // Input utama aplikasi
//         },
//     },
// });

// import path from 'path';
// import { defineConfig } from 'vite';
// import vue from '@vitejs/plugin-vue';

// export default defineConfig({
//     plugins: [vue()],
//     build: {
//         outDir: path.resolve(__dirname, 'public/build'),  // Output build ke public/build
//         manifest: true,  // Menghasilkan file manifest.json
//         rollupOptions: {
//             input: path.resolve(__dirname, 'resources/js/app.js'),  // Input utama aplikasi
//         },
//     },
// });

export default defineConfig({
    plugins: [vue()],
    server: {
        port: 3000, // Ganti port jika 3000 sudah digunakan
    },
    build: {
        outDir: 'public/build',
        manifest: true,
        rollupOptions: {
            input: 'resources/js/app.js',
        },
    },
});




