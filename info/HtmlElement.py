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