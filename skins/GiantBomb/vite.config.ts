import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [vue()],
    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: 'src/main.ts',
            },
            output: {
                entryFileNames: 'app.js',
                assetFileNames: 'app.css',
            }
        }
    }
})