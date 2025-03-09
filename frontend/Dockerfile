# Usa a imagem do Node.js
FROM node:23

# Define o diretório de trabalho
WORKDIR /app

# Copia os arquivos do projeto
COPY package.json ./
COPY package-lock.json ./

# Instala as dependências
RUN npm install

# Copia os demais arquivos do projeto
COPY . .

# Expõe a porta do React
EXPOSE 3000

# Comando para iniciar a aplicação
CMD ["npm", "start"]