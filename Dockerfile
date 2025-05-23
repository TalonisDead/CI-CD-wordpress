# Sử dụng image Node.js
FROM node:18

# Thiết lập thư mục làm việc
WORKDIR /app

# Sao chép package.json và cài đặt dependencies
COPY package.json .
RUN npm install

# Sao chép toàn bộ source code
COPY . .

# Chạy ứng dụng
CMD ["npm", "start"]

# Expose cổng 3000
EXPOSE 3000
