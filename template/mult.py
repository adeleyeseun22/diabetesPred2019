''' Python program to find the
multiplication table (from 1 to 10)'''
#!C:/Python27/python
import socket

s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)

server = 'localhost'
#server = 'http://localhost/assets/nalika/diagnosis.php'
port = 80

#request = "GET / HTTP/1.1\r\nHost:" + server + ":" + str(port) + "\r\n\r\n"
request = "GET /http://localhost/assets/nalika/diagnosis.php:" + server + ":" + str(port) + "\r\n\r\n"

s.connect((server, port))

s.send(request.encode('UTF-8'))

#print("Content-Type: text/html\n\n")
print("content-type: text/html\n\n")
num = 12

# To take input from the user
# num = int(input("Display multiplication table of? "))

# use for loop to iterate 10 times
for i in range(1, 11):
   print(num,'x',i,'=',num*i)

result = "."

while len(result)>0:
	result = s.recv(4096)
	chunk = result.decode('UTF-8')
	print(chunk)
