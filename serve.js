const http = require('http');
const fs = require('fs');
const path = require('path');

const port = 3000;

http.createServer((req, res) => {
    // Parse URL to strip query parameters (e.g. ?v=2.0.0)
    const parsedUrl = new URL(req.url, 'http://localhost');
    let decodedPathname = decodeURIComponent(parsedUrl.pathname);
    
    // Default to index.php if root is requested
    let filePath = path.join(__dirname, decodedPathname === '/' ? 'index.php' : decodedPathname);

    const extname = path.extname(filePath);
    let contentType = 'text/html';

    switch (extname) {
        case '.css':
            contentType = 'text/css';
            break;
        case '.js':
            contentType = 'text/javascript';
            break;
        case '.png':
            contentType = 'image/png';
            break;
        case '.jpg':
        case '.jpeg':
            contentType = 'image/jpeg';
            break;
        case '.gif':
            contentType = 'image/gif';
            break;
        case '.svg':
            contentType = 'image/svg+xml';
            break;
        case '.ico':
            contentType = 'image/x-icon';
            break;
        case '.woff':
            contentType = 'font/woff';
            break;
        case '.woff2':
            contentType = 'font/woff2';
            break;
        case '.ttf':
            contentType = 'font/ttf';
            break;
        case '.eot':
            contentType = 'application/vnd.ms-fontobject';
            break;
    }

    fs.readFile(filePath, (error, content) => {
        if (error) {
            if (error.code === 'ENOENT') {
                res.writeHead(404, { 'Content-Type': 'text/html' });
                res.end('<h1>404 Not Found</h1>', 'utf-8');
            } else {
                res.writeHead(500);
                res.end('Server error: ' + error.code + '\n');
            }
        } else {
            res.writeHead(200, { 'Content-Type': contentType });
            
            // For PHP files, strip the PHP server-side tags since we are serving it statically
            if (extname === '.php') {
                let html = content.toString();
                // Strip <?php ... ?> tags
                html = html.replace(/<\?php[\s\S]*?\?>/g, '');
                res.end(html, 'utf-8');
            } else {
                res.end(content);
            }
        }
    });
}).listen(port);

console.log(`Server running at http://localhost:${port}/`);
