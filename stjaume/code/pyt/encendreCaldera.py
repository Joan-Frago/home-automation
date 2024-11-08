# if there's something to output, it has to be printed

import random
import sys

def test():
    randomNum = random.randint(1,1000)
    print(f"Random Number from a Python script: {randomNum}")

if __name__ == "__main__":
    test()
    
    sys.exit()