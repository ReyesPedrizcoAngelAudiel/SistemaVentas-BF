const { app, BrowserWindow, ipcMain } = require('electron');

let mainWindow;

app.on('ready', () => {
  mainWindow = new BrowserWindow({ width: 1024, height: 600 });

  mainWindow.loadURL('http://localhost/VENTAS/index.php');

  mainWindow.on('closed', () => {
    app.quit();
  });

  // Escuchar el evento desde el proceso de renderizado
  ipcMain.on('usuario-autenticado', () => {
    // Maximizar la ventana a pantalla completa
    mainWindow = new BrowserWindow({ width: 1920, height: 1080 });
  });
});
