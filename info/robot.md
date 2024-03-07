# ChopChop

---

### Optimierungsproblem

Für einen Multipurpose-Agrar-Roboter soll ein Arm gebaut werden, der ein Halm
Getreide, oder eine Frucht, oder ein anderes Agrar-Produkt einsammeln und auf-
laden soll. Der Roboter soll unter Extrembedingungen funktionieren, low-
maintainance sein und günstig zu nutzen, damit er von allen Menschen ge-
nutzt werden kann. Daher soll er unabhängig von Boden, Art des Agrarprodukts,
Witterung und weiteren Parametern funktionieren. Zur Entwicklung des Arms wird
daher ein genetischer Algorithmus entwickelt, der den Arm steuern soll. Die
Informationen bekommt dieser durch die Sensoren des Roboters.

---

### Gen
Ein einzelner Wert für einen Zeitpunkt
$$ t_1: x_1 $$ oder $$ t_1: E_1 $$
kann auch geschrieben werden als
$$ E_{t_1} $$

---

### Chromosom (Individuum):
Bewegungsablauf des Arms in einem Array 
$$ Array(t_1: [x_1,y_1,z_1,E_1], t_2: ...) $$ 
oder
$$ Array(x_{t_1},y_{t_1},z_{t_1},E_{t_1},x_{t_2},...) $$

---

### Zielchromosom: 
Bewegungsablauf mit möglichst schneller Ernte mit möglichst
wenig Energie-Verbrauch $$ \hat{f}(E,\Delta t)=f'(E,\Delta t)=0 ; f''(E,\Delta t)>0 $$ mit 
$$ f(E,\Delta t)=\sqrt{E^2+(\Delta t)^2} $$

---

### Fitness

Da die Fitness für das Zielchromosom maximal wird, steigt sie, wenn sie sich $$ \hat{f}(E,\Delta t) $$ annährt.
Je kleiner also $$ \sqrt{E^2+(\Delta t)^2} $$ desto höher die Fitness.

---

### Selektion

Selektion ist möglichst streng, weil schwache Bewegungsabläufe nicht bestehen bleiben sollten. Zusätzlich sollte diE Crossover-Warscheinlichkeit minimal sein, da Crossover in Bewegungsabläufen keinen Sinn ergeben. 

---

### Mutation