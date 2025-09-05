import random
from turtle import Screen, Turtle, mainloop
s = Screen()
t = Turtle()
t.speed(0)
color = ["red","blue","green","black"]
for i in range(199):
    t.color(random.choice(color))
    t.forward(2)
    t.right(90)
    t.circle(i)

mainloop()