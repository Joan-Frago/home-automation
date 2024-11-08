# if there's something to output, it has to be printed

# Check whether there's current in pins x and y
# If there is, return "ON"
# If there isn't, return "OFF"

estatCaldera = True

def getEstatCaldera():
    if not estatCaldera:
        return "ON"
    else:
        return "OFF"

