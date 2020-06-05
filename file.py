import os

file = open("index.php", "r")  
print(file.read()) 
f1=open("out1.txt","w")
path = 'C:/wamp64/www/thrift/'

files = []
# r=root, d=directories, f = files
for r, d, f in os.walk(path):
    for file in f:
        if '.php' in file or '.css' in file:
            files.append(os.path.join(r, file))

for f in files:
    f1.write(f)
    f1.write("\n")
    file=open(f, "r")  

    f1.write(file.read())
    f1.write("\n")
