# ChopChop

Für einen Multipurpose-Agrar-Roboter soll ein Arm gebaut werden, der ein Halm
Getreide, oder eine Frucht, oder ein anderes Agrar-Produkt einsammeln und auf-
laden soll. Der Roboter soll unter Extrembedingungen funktionieren, low-
maintainance sein und günstig zu nutzen, damit er von allen Menschen ge-
nutzt werden kann. Daher soll er unabhängig von Boden, Art des Agrarprodukts,
Witterung und weiteren Parametern funktionieren. Zur Entwicklung des Arms wird
daher ein genetischer Algorithmus entwickelt, der den Arm steuern soll. Die
Informationen bekommt dieser durch die Sensoren des Roboters.

Chromosom: Bewegungsablauf des Arms in einem Array 
$$ Array(t_1: [x_1,y_1,z_1,E_1], t_2: ...) $$ 

Zielchromosom: Bewegungsablauf mit möglichst schnelle Ernte mit möglichst
wenig Energie-Verbrauch $$ f'(E,\delta t)=0 f''(E,\delta t)>0 $$ mit 
$$ f(E,\delta t)=\sqrt{E^2+{\delta t}^2} $$

