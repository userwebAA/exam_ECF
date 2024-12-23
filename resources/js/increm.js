const { MongoClient } = require('mongodb');

async function incrementCounter() {
  const uri = 'mongodb://localhost:27017';
  const client = new MongoClient(uri);

  try {
    await client.connect();
    const database = client.db('myDatabase');
    const collection = database.collection('myCollection');

    // Incrémentation du champ 'counter' de 1
    const result = await collection.updateOne(
      { _id: 1 }, // Document à mettre à jour
      { $inc: { counter: 1 } }, // Incrémenter le champ 'counter'
      { upsert: true } // Crée le document si inexistant
    );

    console.log('Incrémentation réussie', result);
  } finally {
    await client.close();
  }
}

incrementCounter();
console.log(incrementCounter());
