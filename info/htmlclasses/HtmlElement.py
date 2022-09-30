class Attribute:
        __name = ""
        __value = ""
        def __init__(self,name,value):
            self.__name = name
            self.__value = value
        def getName(self):
            return self.__name;
        def getValue(self): 
            return self.__value;

class TextElement:
    __text = ""
    def __init__(self,text):
        self.__text = text
    def render(self):
        return self.__text

class HtmlElement(TextElement):
    _name = ""
    def __init__(self, name):
        self._name = name
    def render(self):
        return "<"+self._name+">"

class WithAttribute(HtmlElement):
    _attributes = {}
    def addAttribute(self, attribute):
        self._attributes[attribute.getName()] = attribute.getValue()
    def render(self):
        out = ""
        for key,val in self._attributes:
            out.append(" "+key+"="+val)
        return "<"+self._name+out+">"

class WithContent(WithAttribute):
    _content = ""
    def addContent():
        