import api from "../api/axios";

export const getDetails = async (details_id, token) => {
    const response = await api.get(`/details/${details_id}`, {
        headers: {
          Authorization: `Bearer ${token}`,
        },
    });
    return response;
};