using System.Text.Json.Serialization;
namespace EMUSocialAPI.Models.Enums.User
{
    [JsonConverter(typeof(JsonStringEnumConverter))]
    public enum GenderType
    {
        Male,
        Female
    }
}