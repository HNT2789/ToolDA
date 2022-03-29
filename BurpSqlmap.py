from fileinput import filename
import sys
import os
from bs4 import BeautifulSoup
import codecs

result = sys.platform.startswith("Win32")
print(result)
packetnumber = 0
packetnumber = int(packetnumber)
filename = '/home/hoangnguyenthai/Desktop/sql15'
directory ='/home/hoangnguyenthai/Desktop/result'
with open(filename, 'r') as f:
    soup = BeautifulSoup(f.read(), "html.parser")
    for i in soup.find_all("request"):
        packetnumber = packetnumber + 1
        print("   [-] Packet " + str(packetnumber) + " Exported.")
        outfile = codecs.open(os.path.join(directory, str(packetnumber) + ".txt"), "w", "utf-16le")
        outfile.write(i.text.strip())
    print(" ")
    print(str(packetnumber) + " Packets Exported Successfully.")
    print(" ")
for file in os.listdir(directory):
    cmd = "iconv -f utf-16le -t ascii %s > %s_ascii" % (os.path.dirname(os.path.realpath(__file__)) + "/" + directory + "/" + file,os.path.dirname(os.path.realpath(__file__)) + "/" + directory + "/" + file)
    os.system(cmd)
    # cmd = "python " + sqlmappath + "/sqlmap.py -r " + os.path.dirname(os.path.realpath(__file__)) + "/" + directory + "/" + file + " --batch " + proxyvalue + risk_value + level_value + tamper_value + " > " + os.path.dirname(os.path.realpath(__file__)) + "/" + directory + "/testresult" + "_" + file
    # os.system(c
    result = os.path.dirname(os.path.realpath(__file__)) + "/" + directory + "/" + file,os.path.dirname(os.path.realpath(__file__)) + "/" + directory + "/" + file
    print(result)