-- Spherical particles of diameter 150 um and density 2500 kg/m3 settle through a liquid of density 1000 kg/m3 and dynamic viscosity 3.8 mPas. 
-- The volume fraction of particles is 30% in a container of internal diameter 5 cm. Calculate:
--a)	The absolute velocity of the particles.
--b)	The slip velocity.			

--CAUTION: Only works for Newton's or Stokes' regions

local Rhop, Rhof=2500, 1000 -- Particle and fluid density
local Muf=3.5E-3 -- Viscosity of fluid
local Vp=70 -- Volume fraction of particles
local Dvessel, Dp=5E-2,  150E-6 -- Vessel's and particle's diameters
local g=9.8

local Voidage=Vp/100
local K=Dp*(g* Rhof/Muf^2 *(Rhop-Rhof))^(1.0/3.0)
local Ut=0 -- Terminal velocity

if (K<2.8) then 
	print("K= "..tostring(K)..", Stokes region ")
	Ut=g*Dp^2/(18*Muf)* (Rhop-Rhof)
elseif (K>68.9 and K<2360) then
	print(tostring(K)..", Newton's region ") 
	Ut=1.75*(g*Dp*(Rhop-Rhof)/Rhof)^0.5
end

print("Ut: "..tostring(Ut*1000).." mm/s")

local Ar=K^3
local RHS=0.043*Ar^0.57*(1-2.4*(Dp/Dvessel)^0.27) -- Right hand side of equation
local n=(4.8+2.4*RHS)/(1+RHS)


print("n: "..tostring(n))

local Up=Ut*Voidage^n
print("Up:"..tostring(Up*1000).." mm/s")

local Uf=Up*(1-Voidage)/Voidage
print("Uf:"..tostring(Uf*1000).." mm/s")

local Urel=Up+Uf --Up and Uf are in opposite directions
print("Urel:"..tostring(Urel*1000).. " mm/s")


