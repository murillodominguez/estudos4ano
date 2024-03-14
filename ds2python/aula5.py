#Atividade 1

def smaller_value(a,b):
    if(a==b):
        return print(a,'é igual a',b)
    if(a<b):
        menor = a
    if(a>b):
        menor = b
    return print('O menor número entre {a} e {b} é'.format(a=a, b=b),menor)
num1 = float(input('Primeiro número: '))
num2 = float(input('Segundo número: '))

smaller_value(num1,num2)

#Atividade 2

def is_p_or_n(n):
    if(n > 0):
        return print(n, 'é positivo.')
    if(n < 0):
        return print(n, 'é negativo')
    if(n == 0):
        return print(n, 'é nulo')


num = float(input('Informe um número: '))

is_p_or_n(num)

#Atividade 3

def sum_is_bigger(a,b,limite):
    sum = a+b
    if(sum > limite):
        return True
    else:
        return False

lim = float(input('Informe um limite: '))
num1 = float(input('Informe um número pra soma: '))
num2 = float(input('Informe outro número para a soma: '))

sum_is_bigger(num1,num2,lim)

#Atividade 4

def fizz_buzz(n):
    if(not(n % 3 == 0 or n % 5 == 0)):
        return print(n)
    if(n % 3 == 0 and n % 5 == 0):
        return print('FizzBuzz')
    if(n % 3 == 0):
        return print('Fizz')
    if(n % 5 == 0):
        return print('Buzz')

num = float(input('Insira um número para o FizzBuzz: '))

fizz_buzz(num)

#Atividade 5

def in_list(nlist, n):
    if(n in nlist):
        return True
    else:
        return False

new = ""
numlist = list()
while(new != 'pare'):
    new = input('Informe um número para entrar na lista ("pare" para parar): ')
    numlist.append(new)

n = input('Informe um número para verificar se está dentro da lista: ')

for x in numlist:
    print(x)

in_list(numlist, n)

#Atividade 6

def sum_lower_equal_than_n(n):
    if(n == 0):
        return 0
    else:
        return n + sum_lower_equal_than_n(n-1)


n = int(input("Informe um número inteiro positivo: "))

soma = sum_lower_equal_than_n(n)
print(soma)
