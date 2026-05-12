import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
    testDir: './tests',
    fullyParallel: true,
    retries: 1,
    reporter: 'html',
    use: {
        baseURL: process.env.BASE_URL || 'http://localhost/wp-starter',
        screenshot: 'only-on-failure',
        video: 'retain-on-failure',
    },
    projects: [
        { name: 'Desktop Chrome', use: { ...devices['Desktop Chrome'] } },
        { name: 'Mobile Safari',  use: { ...devices['iPhone 13'] } },
        { name: 'Tablet',         use: { ...devices['iPad (gen 7)'] } },
    ],
});
