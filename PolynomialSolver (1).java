/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
import java.io.*;
import java.math.BigDecimal;
import java.math.RoundingMode;
import java.util.*;

public class PolynomialSolver {
    public static void main(String[] args) {
        try {
            String jsonFile = "testcase.json"; // Replace with your file path
            String jsonData = readFile(jsonFile);

            // Parse JSON manually
            Map<String, Map<String, String>> keys = parseJson(jsonData);

            // Decode pointshttps://www.onlinegdb.com/#tab-stdin
            List<Point> points = new ArrayList<>();
            for (String key : keys.keySet()) {
                int x = Integer.parseInt(key);
                Map<String, String> details = keys.get(key);
                int base = Integer.parseInt(details.get("base"));
                String value = details.get("value");
                BigDecimal y = new BigDecimal(Integer.parseInt(value, base));
                points.add(new Point(x, y));
            }

            // Calculate constant term
            BigDecimal constantTerm = lagrangeInterpolation(points);
            System.out.println("The constant term (c) is: " + constantTerm);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    // Manually parse JSON into a nested map
    private static Map<String, Map<String, String>> parseJson(String jsonData) {
        Map<String, Map<String, String>> result = new HashMap<>();
        String keysSection = jsonData.split("\"keys\":")[1].trim();
        keysSection = keysSection.substring(1, keysSection.lastIndexOf("}"));
        String[] entries = keysSection.split("\\},");
        for (String entry : entries) {
            String[] keyValue = entry.split(":\\{");
            String key = keyValue[0].replace("\"", "").trim();
            String[] attributes = keyValue[1].replace("}", "").split(",");
            Map<String, String> details = new HashMap<>();
            for (String attribute : attributes) {
                String[] attrKeyValue = attribute.split(":");
                details.put(attrKeyValue[0].replace("\"", "").trim(), attrKeyValue[1].replace("\"", "").trim());
            }
            result.put(key, details);
        }
        return result;
    }

    // Lagrange interpolation logic
    private static BigDecimal lagrangeInterpolation(List<Point> points) {
        BigDecimal constantTerm = BigDecimal.ZERO;

        for (int i = 0; i < points.size(); i++) {
            Point pi = points.get(i);
            BigDecimal term = pi.y;

            for (int j = 0; j < points.size(); j++) {
                if (i != j) {
                    Point pj = points.get(j);
                    term = term.multiply(BigDecimal.valueOf(0 - pj.x))
                               .divide(BigDecimal.valueOf(pi.x - pj.x), 20, RoundingMode.HALF_UP);
                }
            }

            constantTerm = constantTerm.add(term);
        }

        return constantTerm.setScale(0, RoundingMode.HALF_UP);
    }

    // Helper method to read the file
    private static String readFile(String filePath) throws IOException {
        BufferedReader br = new BufferedReader(new FileReader(filePath));
        StringBuilder sb = new StringBuilder();
        String line;
        while ((line = br.readLine()) != null) {
            sb.append(line);
        }
        br.close();
        return sb.toString();
    }

    // Point class for storing (x, y) pairs
    static class Point {
        int x;
        BigDecimal y;

        Point(int x, BigDecimal y) {
            this.x = x;
            this.y = y;
        }
    }
}

