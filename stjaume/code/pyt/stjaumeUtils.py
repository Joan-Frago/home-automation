# if there's something to output, it has to be printed

# Check whether there's current in pins x and y
# If there is, return "ON"
# If there isn't, return "OFF"

# import raspberry pi's module
try:
    import RPi.GPIO as GPIO
except Exception as e:
    print(e)

def getEstatCaldera(apin):
    try:
        # Set the pin as input
        GPIO.setup(apin, GPIO.IN)

        # read the pin
        estatCaldera = GPIO.input(apin)

        if not estatCaldera:
            return "OFF"
        else:
            return "ON"
    except Exception:
        # for testing purposes
        estatCaldera = False

        if not estatCaldera:
            return "OFF"
        else:
            return "ON"
