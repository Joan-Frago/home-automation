# if there's something to output, it has to be printed

# import raspberry pi's module
try:
    import RPi.GPIO as GPIO
except Exception as e:
    print(e)

# import modules
import random
import sys

def test():
    randomNum = random.randint(1,1000)
    return f"Random Number from a Python script: {randomNum}"

def onCaldera(apin):
    GPIO.setup(apin, GPIO.OUT)
    GPIO.output(apin, GPIO.HIGH)
    
    return f"Pin {apin} is ON"

if __name__ == "__main__":
    iOutput=""
    try:
        # Set mode to use the GPIO numbers
        imode = GPIO.setmode(GPIO.BCM)

        # Define Output pin
        ipin = 23

        # Give current to the pin
        iOutput+=onCaldera(ipin)
    except Exception as e:
        iOutput+=str(e)

    # test function to ensure it is working properly
    iOutput+=test()

    print(iOutput)
    
    sys.exit()