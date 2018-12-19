...
3. cài đặt tailwind:
tailwind là bộ khung scss cho phép tạo giao diện ứng dụng không cần viết css hay bổ xung các dòng code css.
npm install tailwindcss --save
./node_modules/.bin/tailwind init
Tạo file mới postcss.config.js với mã sau
==============================================
/*eslint-disable*/

const tailwindcss = require('tailwindcss')
const autoprefixer = require('autoprefixer')

module.exports = {
  plugins: [
    tailwindcss('./tailwind.js'),
    autoprefixer()
  ]
}
============================================
Tạo file main.css trong forder assets/css với nội dung sau:
============================================
@tailwind prelight;
@tailwind components;

body {
    background: #000000;
}
@tailwind utilities;
============================================
https://tailwindcss.com/docs/installation/
