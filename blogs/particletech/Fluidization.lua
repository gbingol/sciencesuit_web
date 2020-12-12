--[[2)	A packed bed of solid particles of density Rhop kg/m3, occupies a depth of Hbed m in a vessel of cross-sectional area Ac m2. 
--The mass of solids in the bed is mp kg and the surface-volume mean diameter of the particles is Xsv mm. 
--A liquid of density Rhof kg/m3 and viscosity Muf mPa.s flows upwards through the bed. 
--a.	Calculate the initial voidage of the bed. 
--b.	Calculate minimum velocity of fluidization.
--c.	Calculate the pressure drop across the bed when the volume flow rate of liquid is 2 m3/h. ]]--

local Rhop, Rhof=2000, 1000
local mp=3 --kg
local Xsv=1E-3 --m
local Muf=0.001 -- Pa.s
local HBed=0.5 --m
local Ac=0.005 --m2

local Vp=mp/Rhop
local VBed=Ac*HBed
local Voidage=1-Vp/VBed

if(Voidage<=0) then error("Voidage cannot be smaller than 0") end

local dP=(mp*9.81-Rhof*Vp*9.81)/Ac
local c=-dP/HBed
local b=150*(1-Voidage)^2/Voidage^3*Muf/Xsv^2
local a=1.75*Rhof/Xsv*(1-Voidage)/Voidage^3

local Delta=b^2-4*a*c
local Umf=0
if(Delta<0) then print ("No root can be found with givens") end
if(Delta>0) then Umf=(-b+sqrt(Delta))/(2*a) end

print("Initial voidage of the bed: "..tostring(Voidage))
print("Minimum velocity of fluidization: "..tostring(Umf*1000).."mm/s")
