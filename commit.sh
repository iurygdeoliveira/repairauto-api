#!/bin/bash

# Adiciona todas as mudanças ao staging area
git add .

# Solicita ao usuário um comentário para o commit
echo "comentário do commit:"
read commit_message

# Realiza o commit com o comentário fornecido
git commit -m "$commit_message"
