const { Hono } = require('hono');
const app = new Hono();

// Route de test
app.get('/', (ctx) => {
  return ctx.text('Bienvenue sur le serveur Hono!');
});

// Démarrer le serveur en utilisant `listen()` compatible avec Node.js
app.listen(3000).then(() => {
  console.log('Serveur Hono démarré sur http://localhost:3000');
});
