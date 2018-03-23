module.exports = {
  env: {
    browser: true,
  },
  extends: [
    'airbnb',
    'eslint:recommended',
    'plugin:import/errors',
    'plugin:import/warnings',
    'prettier/react',
    'last',
  ],
  rules: {
    'no-console': 0,
    'no-underscore-dangle': 0,
    'consistent-return': 1,
    'global-require': 0,
    'import-order-autofix/order': 1,
    'prefer-destructuring': 1,
  },
  plugins: ['json', 'import', 'prettier', 'import-order-autofix'],
};