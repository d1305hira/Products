import { WebSocketServer } from 'ws';

const wss = new WebSocketServer({ port: 6001 });

wss.on('connection',ws => {
  console.log('Client connected');

  ws.on('message',msg => {
    console.log('received:', msg.toString());
    ws.send(`Echo: ${msg}`);
  });

  ws.on('close', () => {
    console.log('Client disconnected');
  });
});

console.log('WebSocket server running on port 6001');