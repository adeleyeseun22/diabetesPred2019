#!C:/Python27/python

import socket

s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)

server = 'localhost'
#server = 'http://localhost/assets/nalika/diagnosis.php'
port = 80

request = "GET / HTTP/1.1\r\nHost:" + server + ":" + str(port) + "\r\n\r\n"
#request = "GET /http://localhost/assets/nalika/diagnosis.php:" + server + ":" + str(port) + "\r\n\r\n"

s.connect((server, port))

s.send(request.encode('UTF-8'))

#print("Content-Type: text/html\n\n")
print("content-type: text/html\n\n")
print("<br><B>hello python</B>")

result = "."

while len(result)>0:
	result = s.recv(4096)
	chunk = result.decode('UTF-8')
	print(chunk)

