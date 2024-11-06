import random

def test():
    randomNum = random.randint(1,1000)
    return f"Random Number from a Python script: {randomNum}"

if __name__ == "__main__":
    print(test())
    