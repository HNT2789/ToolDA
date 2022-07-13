import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.Serializable;

class User implements Serializable {
    public String username;
}

public class SerializeTest {
    public static void main(String args[]) throws Exception {
        User newUser = new User();
        newUser.username = "Thaihn";
        FileOutputStream fos = new FileOutputStream("object.ser");
        ObjectOutputStream os = new ObjectOutputStream(fos);
        os.writeObject(newUser);
        os.close();
        
        FileInputStream is = new FileInputStream("object.ser");
        ObjectInputStream ois = new ObjectInputStream(is);
        User storedUser = (User) ois.readObject();
        
        System.out.println(storedUser.username);
        ois.close();
    }
}