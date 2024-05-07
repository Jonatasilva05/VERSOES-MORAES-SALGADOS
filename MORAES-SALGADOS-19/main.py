<<<<<<< HEAD
import nltk
from nltk.chat.util import Chat, reflections

pairs = [
    [
        r"Olá|Oi|E aí|Oi!|Olá!",
        ["Olá! Como posso te ajudar?", "Oi! Em que posso ser útil?"]
    ],
    [
        r"Qual é o seu nome?",
        ["Meu nome é ChatGPT e estou aqui para ajudar você.",]
    ],
    [
        r"Quem criou você?|Quem é o seu criador?",
        ["Fui criado pela OpenAI.",]
    ],
    [
        r"adeus|tchau|até logo",
        ["Até logo! Se precisar de mais alguma coisa, estou por aqui.", "Tchau! Tenha um ótimo dia!"]
    ],
]

def chat_bot():
    print("Olá! Sou o ChatGPT. Como posso ajudar você hoje?")
    chat = Chat(pairs, reflections)
    chat.converse()

if __name__ == "__main__":
=======
import nltk
from nltk.chat.util import Chat, reflections

pairs = [
    [
        r"Olá|Oi|E aí|Oi!|Olá!",
        ["Olá! Como posso te ajudar?", "Oi! Em que posso ser útil?"]
    ],
    [
        r"Qual é o seu nome?",
        ["Meu nome é ChatGPT e estou aqui para ajudar você.",]
    ],
    [
        r"Quem criou você?|Quem é o seu criador?",
        ["Fui criado pela OpenAI.",]
    ],
    [
        r"adeus|tchau|até logo",
        ["Até logo! Se precisar de mais alguma coisa, estou por aqui.", "Tchau! Tenha um ótimo dia!"]
    ],
]

def chat_bot():
    print("Olá! Sou o ChatGPT. Como posso ajudar você hoje?")
    chat = Chat(pairs, reflections)
    chat.converse()

if __name__ == "__main__":
>>>>>>> a03277f7551ab8fdbfc917c471e9e3013d7f17bd
    chat_bot()