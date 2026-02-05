const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const imgDir = path.join(__dirname, 'assets', 'img');
const files = [
    'hero_parent.png',
    'surprised-young-man-green-shirt-holding-smartphone-transparent-background.png',
    'winking-smiley-face-emoji-expressing-playful-cheeky-feelings-digital-format.png',
    'wow-emoji-3d.png'
];

async function optimize() {
    for (const file of files) {
        const inputPath = path.join(imgDir, file);
        const outputPath = path.join(imgDir, file.replace('.png', '.webp'));

        if (fs.existsSync(inputPath)) {
            try {
                console.log(`Optimizing ${file}...`);
                await sharp(inputPath)
                    .webp({ quality: 80 })
                    .toFile(outputPath);
                console.log(`✅ ${file} -> ${path.basename(outputPath)}`);
            } catch (err) {
                console.error(`❌ Error converting ${file}:`, err);
            }
        } else {
            console.warn(`⚠️ File not found: ${file}`);
        }
    }
}

optimize();
