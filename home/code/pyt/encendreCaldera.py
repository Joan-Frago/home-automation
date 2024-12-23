# if there's something to output, it has to be printed

# import raspberry pi's module
try:
    import RPi.GPIO as GPIO
except Exception as e:
    pass
    # print(e)

# import modules
import random
import sys

def test():
    randomNum = random.randint(1,1000)
    print(f"Random Number from a Python script: {randomNum}")

def onCaldera(apin):
    GPIO.setup(apin, GPIO.OUT)
    GPIO.output(apin, GPIO.HIGH)
    
    print(f"Pin {apin} is ON")

if __name__ == "__main__":
    try:
        # Set mode to use the GPIO numbers
        imode = GPIO.setmode(GPIO.BCM)

        # Define Output pin
        ipin = 23

        # Give current to the pin
        onCaldera(ipin)
    except Exception as e:
        pass
        # print(e)

    # test function to ensure it is working properly
    test()
    
    sys.exit()