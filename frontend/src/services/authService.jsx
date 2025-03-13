import api from "../api/axios";

export const login = async (email, password) => {  
    const response = await api.post("/login", { email, password });
    return response; 
};

export const register = async (name, email, password) => {
  const response = await api.post("/register", { name, email, password });
  return response;
};