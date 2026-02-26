const fs = require('fs');
const path = require('path');

const dir = path.join(__dirname, '..');
const files = fs.readdirSync(dir).filter(f => f.endsWith('.html'));

files.forEach(f => {
    const content = fs.readFileSync(path.join(dir, f), 'utf8');
    const matches = content.match(/onclick="([^"]+)"/g);
    if (matches) {
        console.log(`\n--- ${f} (${matches.length} matches) ---`);
        matches.forEach(m => console.log(m));
    }
});
