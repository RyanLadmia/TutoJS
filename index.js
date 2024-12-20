const { Hono } = require('hono');
const app = new Hono();

// Route de test
app.get('/', (ctx) => {
  return ctx.text('Bienvenue sur le serveur Hono!');
});

// Démarrer le serveur sur le port 3000
app.listen(3000, () => {
  console.log('Serveur Hono démarré sur http://localhost:3000');
});
